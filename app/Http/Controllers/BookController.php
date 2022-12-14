<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use JetBrains\PhpStorm\NoReturn;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $data = Book::all();
        return view('list_of_books', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BookRequest $request
     * @return RedirectResponse
     */
    public function store(BookRequest $request): RedirectResponse
    {
        $book = new Book();
        $book->Name_book = $request->input('NameBook');
        $book->Book_author = $request->input('BookAuthor');
        $book->save();
        return redirect()->route('home')->with('success', 'Книга была успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param Book $book
     * @return Response
     */
    public function show(Book $book): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Book $book
     * @return Response
     */
    public function edit(Book $book): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Book $book
     * @return Response
     */
    public function update(Request $request, Book $book): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Book $book
     * @return Response
     */
    public function destroy(Book $book)
    {
        //
    }

    public function delete(Request $request): RedirectResponse
    {
        $name = $request->input('NameBook');
        if(DB::table('books')->where('Name_book', '=',
            $request->input('NameBook'))->delete()) {
            return redirect()->route('home')->with('success', 'Книга была успешно удалена');
        } else {
            return redirect()->route('admin_delete')->with('success', 'Введенной книги не существует');
        }
    }

    public function remove(Request $request): RedirectResponse
    {
        $oldName = $request->input('OldBook');
        $newName = $request->input('NewBook');
        $newAuthor = $request->input('NewAuthor');

        if(DB::table('books')
            ->where('Name_book', '=', $oldName)
            ->update(['Name_book' => $newName])) {
            DB::table('books')
                ->where('Name_book', '=', $oldName)
                ->update(['Book_author' => $newAuthor]);
            return redirect()->route('home')->with('success', 'Книга была успешно изменена');
        } else {
            return redirect()->route('admin_remove')->with('success', 'Введенной книги не существует');
        }
    }
}
