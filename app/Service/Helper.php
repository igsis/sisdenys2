<?php

namespace App\Service;

use App\Models\Instituicao;
use Illuminate\Support\Carbon;
use App\User;

class Helper
{

    public static function formatDate(string $data): string
    {
        return Carbon::parse($data)->format('d/m/Y');
    }

    public static function checkStatus($status): ?string
    {

        switch ($status) {
            case 'Pendente_Tecnico':
                return "disabled";
                break;

            case 'Fechado':
                return "disabled";
                break;
            default:
                return null;
        }
    }

    public function getUnidadesAtendimento(): array
    {
        $tipoUnidadesUser = [];

        foreach (auth()->user()->tipousuarios as $key => $u):
            array_push($tipoUnidadesUser, auth()->user()->tipousuarios[$key]->unidade_id);
        endforeach;

        return $tipoUnidadesUser;
    }

    public function getUnidadeInstituicao($instituicao):array
    {
        $unidadesArray = [];
        foreach (Instituicao::find($instituicao)->unidades as $unidade){
            array_push($unidadesArray, $unidade->id);
        }

        return $unidadesArray;
    }
}
