<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Plano;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        if (Cliente::all()->count() === 0) {
            $this->seedClientes();
        }

        if (Plano::all()->count() === 0) {
            $this->seedPlanos();
        }
    }

    private function seedClientes(): void {
        Cliente::create(['nome' => 'Claudianus Boast', 'email' => 'cboast0@fastcompany.com', 'telefone' => '19957645371', 'estado' => 'São Paulo', 'cidade' => 'Araraquara', 'nascimento' => Carbon::parse('1993-06-07')]);
        Cliente::create(['nome' => 'Loni Jennions', 'email' => 'ljennions1@va.gov', 'telefone' => '19905613161', 'estado' => 'São Paulo', 'cidade' => 'Limeira', 'nascimento' => Carbon::parse('1985-05-09')]);
        Cliente::create(['nome' => 'Margi Gilhouley', 'email' => 'mgilhouley2@telegraph.co.uk', 'telefone' => '19966290104', 'estado' => 'São Paulo', 'cidade' => 'Araraquara', 'nascimento' => Carbon::parse('1984-09-13')]);
        Cliente::create(['nome' => 'Lexy Sprulls', 'email' => 'lsprulls3@moonfruit.com', 'telefone' => '19976121601', 'estado' => 'São Paulo', 'cidade' => 'Rio Claro ', 'nascimento' => Carbon::parse('1999-10-19')]);
        Cliente::create(['nome' => 'Marie Shatliff', 'email' => 'mshatliff4@cbslocal.com', 'telefone' => '19991376354', 'estado' => 'São Paulo', 'cidade' => 'Rio Claro ', 'nascimento' => Carbon::parse('1990-07-20')]);
        Cliente::create(['nome' => 'Graig Mouncey', 'email' => 'gmouncey5@so-net.ne.jp', 'telefone' => '19941806149', 'estado' => 'São Paulo', 'cidade' => 'Araraquara', 'nascimento' => Carbon::parse('1990-03-27')]);
        Cliente::create(['nome' => 'Laurice Liger', 'email' => 'lliger0@php.net', 'telefone' => '35971740954', 'estado' => 'Minas Gerais', 'cidade' => 'Areado', 'nascimento' => Carbon::parse('1992-10-25')]);
        Cliente::create(['nome' => 'Kendrick Sooper', 'email' => 'ksooper1@slate.com', 'telefone' => '31944324086', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte', 'nascimento' => Carbon::parse('1981-06-02')]);
        Cliente::create(['nome' => 'Gordon Levington', 'email' => 'glevington2@hpost.com', 'telefone' => '31922405868', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte', 'nascimento' => Carbon::parse('1993-11-25')]);
        Cliente::create(['nome' => 'Noam Scolland', 'email' => 'nscolland3@mozilla.org', 'telefone' => '35996817669', 'estado' => 'Minas Gerais', 'cidade' => 'Areado', 'nascimento' => Carbon::parse('1999-12-31')]);
        Cliente::create(['nome' => 'Lindon Skehens', 'email' => 'lskehens4@npr.org', 'telefone' => '35967671104', 'estado' => 'Minas Gerais', 'cidade' => 'Areado', 'nascimento' => Carbon::parse('1985-01-10')]);
        Cliente::create(['nome' => 'Kimbra Rase', 'email' => 'krase5@topsy.com', 'telefone' => '35999428030', 'estado' => 'Minas Gerais', 'cidade' => 'Areado', 'nascimento' => Carbon::parse('1999-05-05')]);
        Cliente::create(['nome' => 'Lorenzo Fisk', 'email' => 'lfisk6@businessweek.com', 'telefone' => '31912695467', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte', 'nascimento' => Carbon::parse('1985-12-22')]);
        Cliente::create(['nome' => 'Bourke Flavelle', 'email' => 'bflavelle7@fc2.com', 'telefone' => '35959386145', 'estado' => 'Minas Gerais', 'cidade' => 'Itapeva', 'nascimento' => Carbon::parse('1984-04-10')]);
        Cliente::create(['nome' => 'Curran McSharry', 'email' => 'cmcsharry8@webeden.co.uk', 'telefone' => '35902916131', 'estado' => 'Minas Gerais', 'cidade' => 'Itapeva', 'nascimento' => Carbon::parse('1983-01-15')]);
        Cliente::create(['nome' => 'Aveline Dowtry', 'email' => 'adowtry9@miibeian.gov.cn', 'telefone' => '31945227500', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte ', 'nascimento' => Carbon::parse('1994-12-23')]);
        Cliente::create(['nome' => 'John Sebastian', 'email' => 'jsebastiana@cbslocal.com', 'telefone' => '31907366740', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte ', 'nascimento' => Carbon::parse('1998-04-06')]);
        Cliente::create(['nome' => 'Reynolds Greenan ', 'email' => 'rgreenanb@bloomberg.com', 'telefone' => '35923551410', 'estado' => 'Minas Gerais', 'cidade' => 'Itapeva', 'nascimento' => Carbon::parse('1985-07-19')]);
    }

    private function seedPlanos(): void {
        Plano::create(['nome' => 'Free', 'mensalidade' => 0.00]);
        Plano::create(['nome' => 'Basic', 'mensalidade' => 100.00]);
        Plano::create(['nome' => 'Plus', 'mensalidade' => 187.00]);
    }
}
