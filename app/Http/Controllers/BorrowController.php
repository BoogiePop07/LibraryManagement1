<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BorrowHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BorrowController extends Controller
{
    public function borrow($id)
    {
        $book = Book::find($id);

        if ($book && !$book->is_borrowed) {
            $book->is_borrowed = true;
            $book->save();
            return redirect()->back()->with('success', 'You have borrowed the book successfully.');
        }

        return redirect()->back()->with('error', 'The book is already borrowed or does not exist.');
    }
}


