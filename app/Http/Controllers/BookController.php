<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller {

    /**
    * Responds to requests to GET /books
    */
    public function getIndex() {
        return 'List all the books';
    }

    /**
     * Responds to requests to GET /books/show/{title}
     */
    public function getShow($title = null) {
	return view('books.show')->with('title', $title);
	#return 'Show an individual book: '.$title;
    }

    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
	    $view = '<form method="POST" action="/book/create">';
            $view .= csrf_field();
            $view .= 'Book title: <input type="text" name="title">';
            $view .= '<input type="submit">';
            $view .= '</form>';
            
            return $view;
    }

    /**
     * Responds to requests to POST /books/create
     */
    public function postCreate(Request $request) {
	 #return 'Add the book: '.$_POST['title'];
	 return 'Add the book: '.$request->input('title');
    }
}
