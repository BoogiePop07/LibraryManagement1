<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform a search query on the 'books' table
        $books = DB::table('books')
            ->where('book_name', 'LIKE', '%' . $query . '%')
            ->orWhere('author', 'LIKE', '%' . $query . '%')
            ->get();

        // Fetch suggested books (e.g., latest books)
        $suggestedBooks = DB::table('books')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('book.search', [
            'results' => $books,
            'query' => $query,
            'suggestedBooks' => $suggestedBooks
        ]);
    }

    public function borrow($id)
    {
        // Update the book's borrow status
        DB::table('books')
            ->where('id', $id)
            ->update(['is_borrowed' => 1, 'updated_at' => now()]);

        return redirect()->back()->with('success', 'Book borrowed successfully!');
    }

    public function viewBorrowed()
    {
        // Fetch all books that are currently borrowed
        $borrowedBooks = DB::table('books')
            ->where('is_borrowed', 1)
            ->get();

        return view('book.return', ['borrowedBooks' => $borrowedBooks]);
    }

    public function returnBook($id)
    {
        // Update the book's borrow status
        DB::table('books')
            ->where('id', $id)
            ->update(['is_borrowed' => 0, 'updated_at' => now()]);

        return redirect()->back()->with('success', 'Book returned successfully!');
    }
}
