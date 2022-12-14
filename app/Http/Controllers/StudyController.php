<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    

    public function index() {

        print " Hola index de studies";

    }

    public function show($id) {

        print "Show de $id";

    }

    public function edit($id) {

        print "Edit de $id";

    }

    public function create() {

        print "CreateStudy";

    }

    public function destroy($id) {


    }

    public function update($id) {


    }

    public function store() {


    }

}
