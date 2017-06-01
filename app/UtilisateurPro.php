<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UtilisateurPro extends Model
{
    protected $table = 'utilisateurpros';



    public function role(Request $request)
    {
        $utilisateur = DB::table('utilisateurpros')->select('*')->where('role_id',$request->id)->get();
        return view('', compact('utilisateurpros'));
    }
}
