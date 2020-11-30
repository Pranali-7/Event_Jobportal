<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Event;

class EventsController extends Controller
{
    //
    function event()
    {
        $event= Event::all();

        return view('event',['events'=>$event]);   
    }
    function detail($id)
    {
        $data= Event::find($id);
        return view('detail',['event'=>$data]);
    }

    function eventlist()
    {
        $event= Event::all();

        return view('eventlist',['events'=>$event]);
    }

    function addevent( )
    {
        return view('addEvent');
    }

    function add(Request $req)
    {
        $admin=$req->session()->get('admin')['id'];
        $req->validate([
            'organiser'=>'required',
            'link'=>'required',
            'venue'=>'required',
            'email'=>'required|email',
            'image'=>'required',
        ]);
        $event= new Event;
        // $imageName = time().'.'.$req->image->extension();  
        
        
        $image=$req->file('image');
        $imagename=time().'.'.$image->extension();
        $image->move(public_path('images'),$imagename);
        
        $event->organiser=$req->organiser;
        $event->email=$req->email;
        $event->venue=$req->venue;
        $event->link=$req->link;
        $event->image=$imagename;
        $event->admin_id=$admin;
        $event->save();
        return redirect('eventlist')->with('message',"Event Added Successfully");
    }

    function updatevent($id)
    {
        $data=Event::find($id);
        return view('updateEvent' ,['events'=>$data]);

    }

    function editEvent(Request $req,$id)
    {
        $admin=$req->session()->get('admin')['id'];
        if($req->hasFile('image'))
        {
        $image=$req->file('image');
        $imagename=time().'.'.$image->extension();
        $image->move(public_path('images'),$imagename);

        $prev_image=Event::find($id);

        File::delete(public_path('images/'. $prev_image->image));

        Event::where('id',$id)->update([
            'organiser'=>$req->organiser,
            'email'=>$req->email,
            'venue'=>$req->venue,
             'link'=>$req->link,
             'image'=>$imagename,
             'admin_id'=>$admin
        ]);
        }
        else{
            Event::where('id',$id)->update([
                'organiser'=>$req->organiser,
                'email'=>$req->email,
                'venue'=>$req->venue,
                 'link'=>$req->link,
                 'admin_id'=>$admin
            ]);
        }
        

        
        return redirect('eventlist')->with('message',"Event Updated Successfully");

    }

}
