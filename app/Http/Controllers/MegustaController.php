<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\megusta;

class MegustaController extends Controller
{
    public function CrearPost(Request $request)
    {
        if ($request->has("usuario")) {


            $megusta = new Megusta();
            $megusta->usuario = $request->post("usuario");
            $megusta->post_id = $request->post("post_id");
            $megusta->save();
            return $megusta;
        }
        return response()->json(["error mesage" => "sos un salame"]);
    }

    public function ListarTodas(Request $request)
    {
        $megusta=megusta::all();
        return view("listarLikes", ["megusta" => $megusta]);
    }

    public function ListarUnaPost(Request $request, $id)
    {
        return megusta::findOrFail($id);

    }

    public function EliminarPost(Request $request, $id)
    {
        $megusta = megusta::findOrFail($id);
        $megusta->delete();
        return ['mensaje' => 'Me gusta post eliminado'];
    }

    public function ModificarPost(Request $request, $id)
    {
        $megusta = megusta::findOrFail($id);
        $megusta->usuario = $request->post("usuario");
        $megusta->post_id = $request->post("post_id");
        $megusta->save();
        return $megusta;
    }



    public function CrearComentario(Request $request)
    {
        if ($request->has("usuario")) {


            $megusta = new Megusta();
            $megusta->usuario = $request->post("usuario");
            $megusta->comentario_id = $request->post("comentario_id");
            $megusta->save();
            return $megusta;
        }
        return response()->json(["error mesage" => "sos un salame"]);
    }

    public function ListarTodasComentario(Request $request)
    {
        return megusta::all();
    }

    public function ListarUnaComentario(Request $request, $id)
    {
        return megusta::findOrFail($id);
    }

    public function EliminarComentario(Request $request, $id)
    {
        $megusta = megusta::findOrFail($id);
        $megusta->delete();
        return ['mensaje' => 'Me gusta comentario eliminado'];
    }

    public function ModificarComentario(Request $request, $id)
    {
        $megusta = megusta::findOrFail($id);
        $megusta->usuario = $request->post("usuario");
        $megusta->comentario_id = $request->post("comentario_id");
        $megusta->save();
        return $megusta;
    }
}
