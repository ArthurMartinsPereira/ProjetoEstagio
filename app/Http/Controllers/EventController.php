<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Event;
use App\Models\Laboratórios;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Laboratórios $data)
    {
        if ($request->ajax()) {
            $events = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end', '<=', $request->end)
                ->get();


            return response()->json($events);
        }

        return view('calendar');
    }


    function index12()
    {
        $data = DB::table('laboratórios')->get();
        return view('Calendar',['data'=>$data]);
    }
    /**
     * Create new event.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $input = $request->only(['title', 'start', 'end']);

        $request_data = [
            'title' => 'required',
            'start' => 'required',
            'end' => 'required'
        ];

        $validator = Validator::make($input, $request_data);

        // invalid request
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Algo deu errado, cheque os parâmetros.',
            ]);
        }

        $event = Event::create([
            'title' => $input['title'],
            'start' => $input['start'],
            'end' => $input['end'],
        ]);

        return response()->json([
            'success' => true,
            'data' => $event
        ]);
    }

    /**
     * update current event.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $input = $request->only(['id', 'title', 'start', 'end']);

        $request_data = [
            'id' => 'required',
            'title' => 'required',
            'start' => 'required',
            'end' => 'required'
        ];

        $validator = Validator::make($input, $request_data);

        // invalid request
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Algo deu errado, cheque os parâmetros.',
            ]);
        }

        $event = Event::where('id', $input['id'])
            ->update([
                'title' => $request['title'],
                'start' => $request['start'],
                'end' => $request['end'],
            ]);

        return response()->json([
            'success' => true,
            'data' => $event
        ]);
    }

    /**
     * Destroy the event.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Event::where('id', $request->id)
            ->delete();

        return response()->json([
            'success' => true,
            'message' => 'Evento removido com sucesso.'
        ]);
    }





    public function index2(Request $request)
    {
        if ($request->ajax()) {
            $events = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end', '<=', $request->end)
                ->get();

            return response()->json($events);
        }

        return view('calendar');
    }

    /**
     * Create new event.
     *
     * @return \Illuminate\Http\Response
     */
    public function create2(Request $request)
    {
        $input = $request->only(['title', 'start', 'end']);

        $request_data = [
            'title' => 'required',
            'start' => 'required',
            'end' => 'required'
        ];

        $validator = Validator::make($input, $request_data);

        // invalid request
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong, please check all parameters',
            ]);
        }

        $event = Event::create([
            'title' => $input['title'],
            'start' => $input['start'],
            'end' => $input['end'],
        ]);

        return response()->json([
            'success' => true,
            'data' => $event
        ]);
    }

    /**
     * update current event.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit2(Request $request)
    {
        $input = $request->only(['id', 'title', 'start', 'end']);

        $request_data = [
            'id' => 'required',
            'title' => 'required',
            'start' => 'required',
            'end' => 'required'
        ];

        $validator = Validator::make($input, $request_data);

        // invalid request
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong, please check all parameters',
            ]);
        }

        $event = Event::where('id', $input['id'])
            ->update([
                'title' => $request['title'],
                'start' => $request['start'],
                'end' => $request['end'],
            ]);

        return response()->json([
            'success' => true,
            'data' => $event
        ]);
    }

    /**
     * Destroy the event.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy2(Request $request)
    {
        Event::where('id', $request->id)
            ->delete();

        return response()->json([
            'success' => true,
            'message' => 'Event removed successfully.'
        ]);
    }
}
