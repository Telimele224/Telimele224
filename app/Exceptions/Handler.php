<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        // Vérifier si l'exception est une ValidationException
        if ($exception instanceof \Illuminate\Validation\ValidationException) {
            // Rediriger avec les messages d'erreur et les anciennes entrées de formulaire
            return redirect()->back()->withErrors($exception->validator)->withInput();
        }

        // Gérer d'autres types d'exceptions si nécessaire
        // Par exemple, pour les erreurs d'authentification
        if ($exception instanceof \Illuminate\Auth\AuthenticationException) {
            return redirect()->guest(route('login'));
        }

        // Passer l'exception à la vue 404
        return response()->view('errors.404', ['exception' => $exception], 404);
    }
}
