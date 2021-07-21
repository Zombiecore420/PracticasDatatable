<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\AlumnosExport;
use App\Imports\AlumnosImport;
use Maatwebsite\Excel\Excel;
use DataTables;
use PDF;
use App\Models\Alumnos;

class AlumnosController extends Controller {
        
        private $excel;
        public function __construct(Excel $excel){
                $this->excel = $excel;        
        }
        public function index(Request $request){
                if($request->ajax()){
                        $data = Alumnos::latest()->get();
                        return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('otros', function($row){
                                   $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Edit"
                                   class="edit btn btn-primary btn-sm editCustomer">Editar</a>';
                                   $btn = $btn.'<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Delete"
                                   class="btn btn-danger btn-sm deleteCustomer">Borrar</a>';
                                   return $btn;
                                })
                            ->rawColumns(['otros'])
                            ->make(true);
                    }

                return view('welcome');
            }

            public function store(Request $request){
                if($request->Customer_id != ''){

                        if($request->file('img1') != ''){
                                $file = $request->file('img1');
                                $img = $file->getClientOriginalName();
                                $ldate = date('Ymd_His_');
                                $img = $ldate . $img1;
                                \Storage::disk(local)->put($img2, \File::get($ile));
                        }
                        else{
                                $img2 = $request->img2;
                        }
                        Alumnos::where('id', $request->Customer_id)->update([
                                'matricula'=> $request->matricula,
                                'nombre'=> $request->nombre,
                                'app'=> $request->app,
                                'gen'=> $request->gen,
                                'fn'=> $request->fn,
                                'img' => $img2,
                                'email'=> $request->email,
                                'pass'=> $request->pass
                        ]);
                        }
                        else{
                                if($request->file('img1') !=''){
                                        $file = $request->file('img1'); 
                                        $img1 = $file->getClientOriginalName();
                                        $ldate = date('Ymd_His_');
                                        $img2 = $ldate . $img1;
                                        \Storage::disk('local')->put($img2, \File::get($file));
                                }
                                else{
                                        $img2 = "as.jpg";  
                                }
                        Alumnos::create(array(
                                'matricula'=> $request->input('matricula'),
                                'nombre'=> $request->input('nombre'),
                                'app'=> $request->input('app'),
                                'gen'=> $request->input('gen'),
                                'fn'=> $request->input('fn'),
                                'img'=>$img2,
                                'email'=> $request->input('email'),
                                'pass'=> $request->input('pass')
                        ));
                        }
        
                return response()->json(['success'=> 'El cliente se guardo correctamente']);
            }

            public function edit($id){
                    $query= Alumnos::find($id);
                    return response()->json($query);
            }


            public function destroy($id){
                    Alumnos::find($id)->delete();
                    return response()->json(['success' => 'Cliente Eliminado']);
            }
// ----------------------------------------------- pdf--------------------
            public function getPdfAlumnos(){

                    $pdfalum = Alumnos::all();
                    $pdf = PDF::loadView('pdf', compact('pdfalum'));
                    return $pdf->download('pdf_alumnos.pdf');
            }
// ---------------------------------------- Excel -------------------
            public function export(){
                    return $this->excel->download(new AlumnosExport, 'alumnos.xlsx');
            }

            public function import(){
                    $this->excel->import(new AlumnosImport, request()->file('file')); 
                    return back();
            }


// ---------------------------------------- QRCODE -------------------
            public function QrCode(){
                return \QrCode::size(300)
                ->backgroundColor(255,255,255)
                ->generate('Prueba QR Alex PalmaXDXDXD');
            }

            public function Qrimg(){
                $img = \QrCode::format('png')
                ->merge('img/laravel.png', 0.5, true)
                ->size(500)->errorCorrection('H')
                ->generate('Ejemplo de codigo QR');
                return response($img)->header('Content-type','image/png');
            }
    }

