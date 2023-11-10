<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class eventController extends Controller
{
    //
    public function create(){
        try{
            if(session()->has("user")){
                return view("event.create");
            }else{
                return redirect("/");
            }
        }catch(\Exception $e){
            return $e;
        }
      
    }

    public function store(Request $request){
        $name = $request->input("name");
       $event = [
        "event"=>$name,
       ];
       Event::create($event);
       return redirect("/event/list");
    }
    public function viewEvents(){
        $events = Event::orderBy("id","desc")->get();
        return view("event.view", ["events"=>$events]);

    }
    public function edit(Request $request){
        $id = $request->id;
        $event = Event::findorFail($id);
        return view("event.update", ["event"=>$event]);
    }
    public function update(Request $request, ){
        $id = $request->id;
        $event = Event::findorFail($id);
        if($event){
            $data = [
                "event"=>$request->input("event"),
            ];
            $event->update($data);
            return redirect("/event/list");
        }
    }
    public function delete(Request $request){
        $id = $request->id;
        Event::findorFail($id)->delete();
        return redirect("/event/list");
    }
}
