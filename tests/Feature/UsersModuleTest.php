<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function carga_la_lista_de_usuarios()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuario');             //puedo ver el texto usuario
    }

    function carga_los_detalle_de_la_pagina()
    {
        $this->get('/usuario/7')
            ->assertStatus(200)
            ->assertSee('Mostrando detalle del usuario: 7');
    }

    function crear_nuevo_usuario()
    {
        $this->get('/usuario/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }

    function inicio() 
    {
        $this->get('/home')
            ->assertStatus(200)
            ->assertSee('Bienvenido');
    }

    function saludo_nombre_nickname() 
    {
        $this->get('saludo/Diego/Diego3207')
            ->assertStatus(200)
            ->assertSee('Saludos Diego, con apodo Diego3207');
    }
}
