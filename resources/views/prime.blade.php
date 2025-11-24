<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Checker</title>
    @include('layout.bootstrap')
</head>
<body class="bg-light d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h3 class="mb-0">Prime Number Checker</h3>
                    </div>
                    <div class="card-body p-4">
                        
                        <form action="{{ route('prime.check') }}" method="POST">  
                            @csrf
                            <div class="mb-4">
                                <label for="number" class="form-label text-muted">Enter Number to Check</label>
                                <input type="number" 
                                       class="form-control form-control-lg @error('number') is-invalid @enderror" 
                                       id="number" 
                                       name="number"  
                                       value="{{ old('number', $number ?? '') }}" 
                                       required>
                                
                                @error('number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-50 btn-lg" href="{{route('prime.check')}}">
                                Check Number
                            </button>
                        </form>

                        @if(isset($checked))
                            <div class="mt-3">
                                @if($result)
                                    <div class="alert alert-success d-flex align-items-center" role="alert">
                                        <div class="fw-bold" style="font-size: 20px;">
                                            {{ $number }} is a Prime Number
                                        </div>
                                    </div>
                                @else
                                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                                        <div class="fw-bold" style="font-size: 20px;">
                                            {{ $number }} is not a Prime Number
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>