<?php

namespace App\Http\Controllers;

use View;
use App\Models\video;
use DB;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function getVideoUploadForm()
    {
        return view('video.index');
    }

    public function uploadVideo(Request $request)
   {
        $this->validate($request, [
            'tajuk' => 'required|string|max:255',
            'penerangan' => 'required',
            'url' => 'required',
        ]);

        video::create([
            'tajuk'=>request('tajuk'),
            'penerangan'=>request('penerangan'),
            'url'=>request('url'),
        ]);

        return redirect()->route('video.index')->with('success','Video berjaya diupload');
    }
    public $restful = true;

    public function get_index()
    {
    $videos = DB::table('videos')->get();
    return View::make('video.show')
        ->with('tajuk', 'Videos')
        ->with('videos', $videos);
    }
    public function setKeyAttribute($value)
  {
    $this->attributes['url'] = $this->youtubeId($value);
  }

  function YoutubeID($url)
    {
        if(strlen($url) > 11)
        {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
            {
                return $match[1];
            }
            else
                return false;
        }

        return $url;
    }
}
