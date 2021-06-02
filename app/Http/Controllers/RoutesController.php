<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RoutesController extends Controller
{
    public function login(Request $request)
    {
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'content-type' => 'application/json'
        ])->post('http://35.223.106.12/api/login', [
            'email'=>$request['email'],
            'password'=>$request['password']
        ]);
        // return $response;
        if (isset($response['user']))
        {
            $access_token = $response['access_token'];
            session(['access_token' => $access_token]);
            // $response = Http::withHeaders([
            //     'accept' => 'application/json',
            //     'authorization' => "Bearer $access_token"
            // ])->get('http://104.198.5.191/api/Blog');
            // $json = json_decode($response,true);
            // return view('Blog.BlogFeed _new')->with('response', $response);
            $response = Http::get("http://104.198.5.191/api/home");

            // return $response;
            $json = json_decode($response,true);
            return view('indexA')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
    public function register(Request $request)
    {
        // return $request;
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'content-type' => 'application/json'
        ])->post('http://35.223.106.12/api/register', [
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>$request['password'],
            'password_confirmation'=>$request['password_confirmation'],
        ]);
        // return $response;
        if (isset($response['user']))
        {
            $access_token = $response['access_token'];
            session(['access_token' => $access_token]);
            // $response = Http::withHeaders([
            //     'accept' => 'application/json',
            //     'authorization' => "Bearer $access_token"
            // ])->get('http://104.198.5.191/api/Blog');
            // $json = json_decode($response,true);
            // return view('Blog.MyBlogFeed')->with('response', $response);
            // return view('Blog.BlogFeed _new')->with('response', $response);
            $response = Http::get("http://104.198.5.191/api/home");

            // return $response;
            $json = json_decode($response,true);
            return view('indexA')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
    public function blogstore(Request $request)
    {
        // return $request;
        $access_token = session('access_token', 'default value');

        if ($request->hasFile('img')) {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->attach(
                'img', file_get_contents($request->img), $request['img'])
            ->post('http://104.198.5.191/api/Blog', [
                'title'=>$request['title'],
                'intro'=>$request['intro'],
                'img'=>$request->img,
                'content'=>$request['content'],
                'category'=>$request['category'],
            ]);
        }
        else
        {
            return back();
        }
        if (isset($response['Status']))
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get('http://104.198.5.191/api/Blog');
            $json = json_decode($response,true);
            return view('Blog.MyBlogFeed')->with('response', $response);
            return view('Blog.BlogFeed _new')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
    public function img(Request $request)
    {
        if ($request->hasFile('upload')) {
            $response = Http::attach(
                'upload', file_get_contents($request->upload), $request['upload'])
            ->post('http://104.198.5.191/api/StoreImg', [
                'CKEditorFuncNum'=>$request['CKEditorFuncNum'],
                'upload'=>$request->upload
            ]);
        }
        return $response;
    }
    public function blog()
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'authorization' => "Bearer $access_token"
        ])->get('http://104.198.5.191/api/Blog');

        $json = json_decode($response,true);
        return view('Blog.MyBlogFeed')->with('response', $response);
        return view('Blog.BlogFeed _new')->with('response', $response);
    }


    public function blogedit($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'authorization' => "Bearer $access_token"
        ])->get("http://104.198.5.191/api/Blog$id");

        $json = json_decode($response,true);
        // return $response;
        return view('Blog.EditBlog')->with('response', $response);
    }


    public function blogupdate(Request $request)
    {
        // return $request;
        $access_token = session('access_token', 'default value');

        $id = $request['id'];

        if ($request->hasFile('img')) {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->attach(
                'img', file_get_contents($request->img), $request['img'])
            ->put("http://104.198.5.191/api/Blog/$id", [
                'title'=>$request['title'],
                'intro'=>$request['intro'],
                'img'=>$request->img,
                'content'=>$request['content'],
                'category'=>$request['category'],
            ]);
        }
        else
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->put("http://104.198.5.191/api/Blog/$id", [
                'title'=>$request['title'],
                'intro'=>$request['intro'],
                'content'=>$request['content'],
                'category'=>$request['category'],
            ]);
        }

        
        if (isset($response['Status']))
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get('http://104.198.5.191/api/Blog');
            $json = json_decode($response,true);
            return view('Blog.MyBlogFeed')->with('response', $response);
            return view('Blog.BlogFeed _new')->with('response', $response);
        }
        else
        {
            return back();
        }
    }

    public function blogshow($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'authorization' => "Bearer $access_token"
        ])->get("http://104.198.5.191/api/ShowBlog$id");

        $json = json_decode($response,true);
        // return $response;
        return view('Blog.ViewBlog')->with('response', $response);
    }

    public function blogdelete($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'authorization' => "Bearer $access_token"
        ])->delete("http://104.198.5.191/api/Blog/$id");

        $json = json_decode($response,true);
        // return $response;
        if (isset($response['Status']))
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get('http://104.198.5.191/api/Blog');
            $json = json_decode($response,true);
            return view('Blog.MyBlogFeed')->with('response', $response);
            return view('Blog.BlogFeed _new')->with('response', $response);
        }
    }



    public function Qimg(Request $request)
    {
        if ($request->hasFile('upload')) {
            $response = Http::attach(
                'upload', file_get_contents($request->upload), $request['upload'])
            ->post('http://35.235.105.40/api/StoreImg', [
                'CKEditorFuncNum'=>$request['CKEditorFuncNum'],
                'upload'=>$request->upload
            ]);
        }
        return $response;
    }

    public function questionstore(Request $request)
    {
        $access_token = session('access_token', 'default value');

            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->post('http://35.235.105.40/api/Question', [
                'title'=>$request['title'],
                'content'=>$request['content'],
                'category'=>$request['category'],
            ]);
            // return $response;

        if (isset($response['Status']))
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get('http://35.235.105.40/api/Question');
            $json = json_decode($response,true);
            return view('Question.MyQAFeed')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
    public function questionedit($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'authorization' => "Bearer $access_token"
        ])->get("http://35.235.105.40/api/Question$id");

        $json = json_decode($response,true);
        // return $response;
        return view('Question.EditQuestion')->with('response', $response);
    }


    public function questionupdate(Request $request)
    {
        $access_token = session('access_token', 'default value');

        $id = $request['id'];

            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->put("http://35.235.105.40/api/Question/$id", [
                'title'=>$request['title'],
                'content'=>$request['content'],
                'category'=>$request['category'],
            ]);

        
        if (isset($response['Status']))
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get('http://35.235.105.40/api/Question');
                $json = json_decode($response,true);
                return view('Question.MyQAFeed')->with('response', $response);
        }
        else
        {
            return back();
        }
    }

    public function questiondelete($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'authorization' => "Bearer $access_token"
        ])->delete("http://35.235.105.40/api/Question/$id");

        $json = json_decode($response,true);
        // return $response;
        if (isset($response['Status']))
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get('http://35.235.105.40/api/Question');
                $json = json_decode($response,true);
                return view('Question.MyQAFeed')->with('response', $response);
        }
    }

    public function question()
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'authorization' => "Bearer $access_token"
        ])->get('http://35.235.105.40/api/Question');
            $json = json_decode($response,true);
            return view('Question.MyQAFeed')->with('response', $response);
    }

    public function questionshow($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'authorization' => "Bearer $access_token"
        ])->get("http://35.235.105.40/api/ShowQuestion$id");

        $json = json_decode($response,true);
        // return $response;
        return view('Question.ViewQA')->with('response', $response);
    }

    public function commentstore(Request $request)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->post("http://104.198.5.191/api/Comment", [
            'blog_id'=>$request['id'],
            'comment'=>$request['comment'],
        ]);

        $id = $request['id'];

        $response = Http::withHeaders([
            'authorization' => "Bearer $access_token"
        ])->get("http://104.198.5.191/api/ShowBlog$id");

        $json = json_decode($response,true);
        // return $response;
        return view('Blog.ViewBlog')->with('response', $response);
    }

    public function commentdelete($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'authorization' => "Bearer $access_token"
        ])->delete("http://104.198.5.191/api/Comment/$id");

        $json = json_decode($response,true);
        if (isset($response['Status']))
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->get('http://104.198.5.191/api/Blog');
                $json = json_decode($response,true);
                return view('Blog.MyBlogFeed')->with('response', $response);
                return view('Blog.BlogFeed _new')->with('response', $response);
        }
    }

    public function answerstore(Request $request)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
        ])->post("http://35.235.105.40/api/Answer", [
            'question_id'=>$request['id'],
            'content'=>$request['content'],
        ]);

        // return $response;

        $id = $request['id'];

        $response = Http::withHeaders([
            'authorization' => "Bearer $access_token"
        ])->get("http://35.235.105.40/api/ShowQuestion$id");

            $json = json_decode($response,true);
            return view('Question.ViewQA')->with('response', $response);
    }

    public function mydashboard()
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'authorization' => "Bearer $access_token"
        ])->get("http://35.223.106.12/api/User");

        // return $response;
        $json = json_decode($response,true);
        return view('User.User')->with('response', $response);
    }

    public function edituser()
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'authorization' => "Bearer $access_token"
        ])->get("http://35.223.106.12/api/UserEdit");

        // return $response;
        $json = json_decode($response,true);
        return view('User.Edit')->with('response', $response);
    }
    public function userupdate(Request $request)
    {
        // return $request;
        $access_token = session('access_token', 'default value');

        if ($request->hasFile('img')) 
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
            ])->attach(
                'img', file_get_contents($request->img), $request['img']
            )->post("http://35.223.106.12/api/UserUpdate", [
                'id'=>$request['id'],
                'name'=>$request['name'],
                'description'=>$request['description'],
                // 'img'=>$request->img,
            ]);
        }
        else
        {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'authorization' => "Bearer $access_token"
                ])->post("http://35.223.106.12/api/UserUpdate", [
                    'id'=>$request['id'],
                    'name'=>$request['name'],
                    'description'=>$request['description'],
                ]);
        }

        // return $response;
        
        if (isset($response['Status']))
        {
            $response = Http::withHeaders([
                'authorization' => "Bearer $access_token"
            ])->get("http://35.223.106.12/api/User");
    
            // return $response;
            $json = json_decode($response,true);
            return view('User.User')->with('response', $response);
        }
        else
        {
            return back();
        }
    }
    public function home()
    {

        $response = Http::get("http://104.198.5.191/api/home");

        // return $response;
        $json = json_decode($response,true);
        return view('index')->with('response', $response);
    }

    public function allblogs()
    {

        $response = Http::get("http://104.198.5.191/api/blogs");

        // return $response;
        $json = json_decode($response,true);
        return view('Guest.BlogFeedN')->with('response', $response);
    }

    public function blogshowguest($id)
    {
        $response = Http::withHeaders([
            'accept' => 'application/json',
            ])->get("http://104.198.5.191/api/BlogGuestShow/$id");

        $json = json_decode($response,true);
        // return $response;
        return view('Guest.ViewBlogN')->with('response', $response);
    }

    public function allquestions()
    {

        $response = Http::get("http://35.235.105.40/api/questions");

        // return $response;
        $json = json_decode($response,true);
        return view('Guest.MyQAFeedN')->with('response', $response);
    }

    public function questionshowguest($id)
    {
        $response = Http::withHeaders([
            'accept' => 'application/json',
            ])->get("http://35.235.105.40/api/QuestionGuestShow/$id");

        $json = json_decode($response,true);
        // return $response;
        return view('Guest.ViewQAN')->with('response', $response);
    }
    public function homelogged()
    {
        $response = Http::get("http://104.198.5.191/api/home");

        // return $response;
        $json = json_decode($response,true);
        return view('indexA')->with('response', $response);
    }

    public function allblogsAuth()
    {

        $response = Http::get("http://104.198.5.191/api/blogs");

        // return $response;
        $json = json_decode($response,true);
        return view('Blog.BlogFeed')->with('response', $response);
    }

    public function allquestionsAuth()
    {

        $response = Http::get("http://35.235.105.40/api/questions");

        // return $response;
        $json = json_decode($response,true);
        return view('Question.QAFeed')->with('response', $response);
    }

    public function profile($id)
    {
        // return $id;
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
            ])->get("http://35.223.106.12/api/Profile$id");

            $json = json_decode($response,true);
            return $response;
            return view('User.Profile')->with('response', $response);
    }

    public function profile1($name)
    {
        // return $name;
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
            ])->get("http://35.223.106.12/api/Profile1$name");

            $json = json_decode($response,true);
            // return $response;
            return view('User.Profile')->with('response', $response);
    }

    public function bprofile($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
            ])->get("http://35.223.106.12/api/BProfile$id");

            $json = json_decode($response,true);
            // return $response;
            return view('User.Profile')->with('response', $response);
    }

    public function cprofile($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
            ])->get("http://35.223.106.12/api/CProfile$id");

            $json = json_decode($response,true);
            // return $response;
            return view('User.Profile')->with('response', $response);
    }

    public function qprofile($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
            ])->get("http://35.223.106.12/api/QProfile$id");

            $json = json_decode($response,true);
            // return $response;
            return view('User.Profile')->with('response', $response);
    }

    public function aprofile($id)
    {
        $access_token = session('access_token', 'default value');

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $access_token"
            ])->get("http://35.223.106.12/api/AProfile$id");

            $json = json_decode($response,true);
            // return $response;
            return view('User.Profile')->with('response', $response);
    }
}
