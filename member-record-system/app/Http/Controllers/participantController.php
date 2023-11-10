<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;

class participantController extends Controller
{
    //Participants form//
    public function createParticipant(){
        try{
            if(session()->has("user")){
                return view("createUser");
            }else{
                return redirect("/");
            }
        }catch(\Exception $e){
            return $e;
        }
      
    }

    //Add participants//
    public function addParticipant(Request $request){
        $first_name = $request->input("first_name");
        $last_name = $request->input("last_name");
        $email = $request->input("email");
        $phone = $request->input("phone");
        $age = $request->input("age");
        $address = $request->input("address");
        $professional_summary = $request->input("professional_summary");
        $participant = [
            "first_name"=> $first_name,
            "last_name"=> $last_name,
            "email"=> $email,
            "phone"=> $phone,
            "age"=> $age,
            "address"=> $address,
            "professional_summary"=> $professional_summary
        ];
        Participant::create( $participant );
        return redirect("/user/list");
    }

//Edit participants //
    public function editParticipant(Request $request){
        try{
        if(session()->has("user")){
            $id = $request->id;
            $participant = Participant::findorFail($id);
            return view("updateUser", ["participant"=>$participant]);
        }else{
            return redirect("/");
        }

        }catch(\Exception $e){
            return $e;
        }
       
}

//update participants//
public function updateParticipant(Request $request){
    $id = $request->id;
    $participant = Participant::findorFail($id);

    if( $participant ){
        $first_name = $request->input("first_name");
        $last_name = $request->input("last_name");
        $email = $request->input("email");
        $phone = $request->input("phone");
        $age = $request->input("age");
        $address = $request->input("address");
        $professional_summary = $request->input("professional_summary");
        $data = [
            "first_name"=> $first_name,
            "last_name"=> $last_name,
            "email"=> $email,
            "phone"=> $phone,
            "age"=> $age,
            "address"=> $address,
            "professional_summary"=> $professional_summary
        ];
    }
    
    $participant->update( $data );
    return redirect("/user/list");
}

//Get all the participants //
public function getParticipants(){
    try{
        session()->start();
        if(session()->has("user")){
            $participants = Participant::all();
            return view("index", ["participants"=>$participants]);
        }else{
            return redirect("/");
        }
    }catch( \Exception $e ){
        return $e;
    }
   
}

//Delete Participant//
public function deleteParticipant(Request $request){
    $id = $request->id;
    $participant = Participant::findorFail($id);
    $participant->delete();
    return redirect("/user/list");
}
}


