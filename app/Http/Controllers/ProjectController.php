<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    // Menampilkan daftar proyek dengan pagination
    public function index()
    {
        // Ambil data project dari database dengan pagination
        $projects = Project::paginate(9);

        // Kirim data ke view landing.blade.php
        return view('dashboard.projects.index', compact('projects'));
    }

    // Menampilkan form untuk membuat proyek baru
    public function create()
    {
        return view('dashboard.projects.create'); // Menampilkan form untuk membuat proyek
    }

    // Menyimpan proyek baru
    public function store(Request $request)
    {
        // Validasi input yang diterima
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
        ]);

        // Menyimpan gambar ke storage dan mendapatkan path-nya
        $imagePath = $request->file('image')->store('images', 'public');

        // Menyimpan proyek baru ke dalam database
        Project::create([
            'image' => $imagePath,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
        ]);

        // Redirect kembali ke daftar proyek dengan pesan sukses
        return redirect()->route('dashboard.projects.index')->with('success', 'Project successfully created!');
    }

    // Menampilkan form untuk mengedit proyek
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', compact('project')); // Menampilkan form edit proyek
    }

    // Memperbarui proyek
    public function update(Request $request, Project $project)
    {
        // Validasi input yang diterima
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required|url', // Memastikan link yang dimasukkan adalah URL yang valid
        ]);

        // Jika ada gambar yang diupload, simpan gambar baru
        if ($request->hasFile('image')) {
            // Menyimpan gambar baru dan mendapatkan path-nya
            $imagePath = $request->file('image')->store('images', 'public');
            
            // Perbarui gambar proyek di database
            $project->update(['image' => $imagePath]);
        }

        // Memperbarui informasi proyek lainnya
        $project->update($request->only('title', 'description', 'link'));

        // Redirect kembali ke daftar proyek dengan pesan sukses
        return redirect()->route('dashboard.projects.index')->with('success', 'Project successfully updated!');
    }

    // Menghapus proyek
    public function destroy(Project $project)
    {
        // Menghapus proyek dari database
        $project->delete();

        // Mengarahkan kembali ke daftar proyek dengan pesan sukses
        return redirect()->route('dashboard.projects.index')->with('success', 'Project successfully deleted!');
    }
}
