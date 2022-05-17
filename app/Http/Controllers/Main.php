<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Auth;
use App\Models\TempProjectCategory;
use App\Models\Project;
use App\Models\ProjectCategory;


class Main extends Controller
{
    public function index()
    {
        $projects = Project::with(['categoryes'])->get();
        // dd(Project::with(['categoryes'])->get()->toArray());
        return view('home',  compact('projects'));
    }
    public function getProject(Request $request)
    {
        $projects = Project::with(['categoryes'])->findOrFail($request->input('id'))->first();
        echo json_encode($projects);
    }
    public function resume()
    {
        return view('resume');
    }
    public function sendMail(Request $request)
    {

        $subject =  $request->input('subject');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
            // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'ucihaobito691@gmail.com';                 // SMTP username
            $mail->Password = '56muhammad';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            // Siapa yang mengirim email
            $mail->setFrom("ucihaobito691@gmail.com", "Portfolio Website");

            // Siapa yang akan menerima email
            $mail->addAddress('muhwisnuhidayat@gmail.com', 'Wisnu Hidayat');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);

            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Your email has been sent.');
            return redirect()->back();
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function login()
    {
        return view('login');
    }
    public function myAuth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin');
        }

        return back()->with('loginError', 'Login failed!');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
   
}
