<?php
/**
*
*/
class Home extends Controller
{
    protected $user;

    public function __contruct(){
        $this->user = $this->model('User');
    }
    public function index($name = ''){
        $user = $this->user;
        $user->name =$name;

        $this->view('home/index', ['name'=>$user->name]);
    }

    public function create($username ='', $email = ''){
        User::create([
            'username' =>$username,
            'email' =>$email
        ]);
    }

    public function update($id ='', $username ='', $email = ''){
        //  http://127.0.0.1/php-mvc/public/home/update/2/Carlo/marcelo@3d.com.br
            $user = User::find($id);
            $user->username = $username;
            $user->email = $email;
            $user->save();
    }

    public function delete($id=''){
        //  http://127.0.0.1/php-mvc/public/home/delete/2/Carlo/marcelo@3d.com.br
        $user = User::find($id);
        $user->delete();
        echo "Deleted Successfully";
    }
    public function retrieve($id){
        $data = User::find($id)->id;
        $name = User::find($data)->username;

        $this->view('home/index', ['name'=>$name]);
        //echo $name;
    }
}
