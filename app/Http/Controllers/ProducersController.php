<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producer;

class ProducersController extends Controller
{
    //
    public function prrIndex() {
        $prrdata = Producer::all();
        return view('prrlist',['prrdata'=>$prrdata]);
    }
    public function addProducer() {
        return view ('add-producer');
    }

    public function saveProducer(Request $req) {

        $producerid = $req->get('producerid');
        $producername = $req->get('producername'); 
        $produceraddress = $req->get('produceraddress'); 
        $producercountry = $req->get('producercountry'); 

        $prr = new Producer();
        $prr->producerid = $producerid;
        $prr->producername = $producername; 
        $prr->produceraddress = $produceraddress; 
        $prr->producercountry = $producercountry; 
        $prr->save();

        return redirect('prrlist');
    }

    public function editProducer($producerID){
        $data = Producer::where('producerID','=',$producerID)->first();

            return view('updateprr', ['data'=>$data]);
        }

    public function updateProducer(Request $req) {
         $producerID = $req->producerid;
         $producerName = $req->producername;
         $producerAddress = $req->produceraddress;
         $producerCountry = $req->producercountry;
                                  
         
         Producer::where('producerID','=',$producerID)->update([
            'producerID'=>$producerID,
            'producerName' => $producerName, 
            'producerAddress' => $producerAddress,
            'producerCountry' => $producerCountry]);
            return redirect('prrlist');
    }
    public function deleteProducer($producerID){
        Producer::where('producerID','=',$producerID)->delete();
        return redirect('prrlist');
    }
}
