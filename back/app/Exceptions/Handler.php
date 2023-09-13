<?php

    namespace App\Exceptions;

    use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
    use Illuminate\Validation\ValidationException;
    use Throwable;

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
            $this->reportable(
                function (Throwable $e) {
                    //
                }
            );
            $this->renderable(
                function (Throwable $exception) {
                    if ($exception instanceof ValidationException) {
                        return response(['error' => $exception->errors()], $exception->getCode() ?: 400);
                    }

                    return response(['error' => $exception->getMessage()], $exception->getCode() ?: 422);
                }
            );

        }
    }
