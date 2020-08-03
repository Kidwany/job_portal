<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; use App\TravelAgent; 
use App\TravelAgentMessage;
use Image; use Auth; use Mail;
use App\Mail\MessageSendTravelAgentMail;
use Validator; use Session; 
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class TravelAgentMessagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $post_input = 'post_input';
    public function __construct()
    {
        $this->middleware('travel_agent');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    function submitnew_message_seeker(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
        ], [
            'message.required' => 'Message is required.',
        ]);
        $message = new TravelAgentMessage();
        $message->company_id = Auth::guard('travel_agent')->user()->id;
        $message->message = $request->message;
        $message->seeker_id = $request->seeker_id;
        $message->type = 'reply';
        $message->save();

        $travel_agent = TravelAgent::where('id', Auth::guard('travel_agent')->user()->id)->first();
        $user = User::where('id', $request->seeker_id)->first();
        $data['name'] = $user->name;
        $data['email'] = $user->email;
        $data['travel_agent_name'] = $travel_agent->name;

        // Mail::send(new MessageSendTravelAgentMail($data));
        if ($message->save() == true) {
            $arr = array('msg' => 'Your message have successfully been posted. ', 'status' => true);
        }
        return Response()->json($arr);
    }

    function submit_message(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
        ], [
            'message.required' => 'Message is required.',
        ]);
        $message = new TravelAgentMessage();
        $message->company_id = Auth::guard('travel_agent')->user()->id;
        $message->message = $request->message;
        $message->seeker_id = $request->seeker_id;
        $message->type = 'reply';
        $message->save();
        
        $travel_agent = TravelAgent::where('id', Auth::guard('travel_agent')->user()->id)->first();
        $user = User::where('id', $request->seeker_id)->first();
        $data['name'] = $user->name;
        $data['email'] = $user->email;
        $data['travel_agent_name'] = $travel_agent->name;

        // Mail::send(new MessageSendTravelAgentMail($data));
        if ($message->save() == true) {
            $seeker_id = $request->seeker_id;
            $travel_agent_id = Auth::guard('travel_agent')->user()->id;
            $messages = TravelAgentMessage::where('company_id', $travel_agent_id)->where('seeker_id', $seeker_id)->get();
            $seeker = User::where('id', $seeker_id)->first();
            $travel_agent = TravelAgent::where('id', $travel_agent_id)->first();
            $search = view("travel_agent.appendonly-messages", compact('messages', 'seeker', 'travel_agent'))->render();
            return $search;
        }
    }
    
    public function all_messages()
    {
        $messages = TravelAgentMessage::where('company_id', Auth::guard('travel_agent')->user()->id)->get();
        $ids = array();
        foreach ($messages as $key => $value) {
            $ids[] = $value->seeker_id;
        }
        $data['seekers'] = User::whereIn('id', $ids)->get();
        return view('travel_agent.all-messages')->with($data);
    }

    public function append_messages(Request $request)
    {
        $seeker_id = $request->get('seeker_id');
        $travel_agent_id = Auth::guard('travel_agent')->user()->id;
        $messages = TravelAgentMessage::where('company_id', $travel_agent_id)->where('seeker_id', $seeker_id)->get();
        $seeker = User::where('id', $seeker_id)->first();
        $travel_agent = TravelAgent::where('id', $travel_agent_id)->first();
        $search = view("travel_agent.append-messages", compact('messages', 'seeker', 'travel_agent'))->render();
        return $search;
    }

    public function appendonly_messages(Request $request)
    {
        $seeker_id = $request->get('seeker_id');
        $travel_agent_id = Auth::guard('travel_agent')->user()->id;
        $messages = TravelAgentMessage::where('company_id', $travel_agent_id)->where('seeker_id', $seeker_id)->get();
        $seeker = User::where('id', $seeker_id)->first();
        $travel_agent = TravelAgent::where('id', $travel_agent_id)->first();
        $search = view("travel_agent.appendonly-messages", compact('messages', 'seeker', 'travel_agent'))->render();
        $data = array();
        $data['html_data'] = $search;
        $data['seeker_id'] = $seeker_id;
        return \Response::json($data);
    }

    public function change_message_status(Request $request)
    {
        $travel_agent_id = Auth::guard('travel_agent')->user()->id;
        $seeker_id = $request->get('sender_id');
        $messages = TravelAgentMessage::where('company_id', $travel_agent_id)->where('seeker_id', $seeker_id)->get();
        if ($messages) {
            foreach ($messages as $key => $value) {
                $message = TravelAgentMessage::findOrFail($value->id);
                $message->status = 'viewed';
                $message->update();
            }
        }
        echo 'done';
    }
    
}
