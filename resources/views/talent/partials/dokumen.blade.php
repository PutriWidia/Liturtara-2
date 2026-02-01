<div class="container mt-4">

    {{-- SUCCESS ALERT --}}
    @if(session('success'))
    <div id="alert-success" class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    {{-- ERROR ALERT --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $e)
            <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>
    @endif



    {{-- ================== CV UPLOAD ================== --}}
    <div class="card mb-4">
        <h1 class="text-blue-910 font-bold text-4xl">CV & Certificate</h1>
        <p class="text-blue-900 font-bold" style="margin-top: 6px; font-size: 20px;">Talent Researcher</p>
        <br>
        <br>

        <div class="card-body">

            <form action="{{ route('talent.cv.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <h1 class="text-blue-910 font-bold text-4xl">Curriculum Vitae</h1>

                    <div class="border border-secondary rounded p-4 text-center bg-light"
                        onclick="document.getElementById('cv-input').click()"
                        style="border-style: dashed; cursor:pointer">

                        <i class="bi bi-file-earmark-arrow-up" style="font-size:40px"></i>

                        <p class="mt-2 mb-1 font-weight-bold">Click to upload CV</p>
                        <small>PDF / JPG / PNG — max 10 MB</small>

                        <input id="cv-input" type="file" name="cv" accept=".pdf,.jpg,.jpeg,.png" hidden>

                        <div id="cv-file-name" class="mt-2 text-primary"></div>
                    </div>
                </div>

                @if(auth()->user()->profileTalent?->cv)
                <p class="mt-2">
                    <strong>Current CV:</strong>
                    <a class="text-success"
                        target="_blank"
                        href="{{ asset('storage/app/public/cv' . auth()->user()->profileTalent->cv) }}">
                        View CV
                    </a>
                </p>
                @endif

                <button type="submit" class="btn btn-primary mt-2">
                    Upload / Replace CV
                </button>
            </form>

        </div>
    </div>

    <br>
    <br>
    <br>


    {{-- ================== CERTIFICATE UPLOAD ================== --}}
    <div class="card mb-4">
        <div class="card-header">
            <!-- <strong>Certificates</strong> -->
        </div>

        <div class="card-body">

            <form action="{{ route('talent.certificate.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <h1 class="text-blue-910 font-bold text-4xl">Certificate</h1>

                    <input type="text" name="title" class="form-control" placeholder="ex: Web Developer Certificate">
                </div>

                <div class="form-group mb-3">
                    <!-- <label>Upload Certificate</label> -->

                    <div class="border border-secondary rounded p-4 text-center bg-light"
                        onclick="document.getElementById('cert-input').click()"
                        style="border-style: dashed; cursor:pointer">

                        <i class="bi bi-file-earmark-plus" style="font-size:40px"></i>

                        <p class="mt-2 mb-1 font-weight-bold">Click to upload certificate</p>
                        <small>PDF / JPG / PNG — max 10 MB</small>

                        <input id="cert-input" type="file" name="certificate" accept=".pdf,.jpg,.jpeg,.png" hidden>

                        <div id="cert-file-name" class="mt-2 text-primary"></div>
                    </div>
                </div>

                <!-- <button type="submit" class="btn btn-success">
                    Upload Certificate
                </button> -->

            </form>

        </div>
    </div>


    <!-- <div class="card">
        <div class="card-header">
            <strong>Your Certificates</strong>
        </div>

        <div class="card-body">

            @forelse(auth()->user()->certificates as $cert)

            <div class="d-flex justify-content-between align-items-center border-bottom py-2">

                <a target="_blank"
                    href="{{ asset('storage/' . $cert->file_path) }}">
                    {{ $cert->title ?? 'Certificate' }}
                </a>

                <form action="{{ route('certificate.delete', $cert->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
            </div>

            @empty
            <p class="text-muted mb-0">No certificates uploaded yet.</p>
            @endforelse

        </div>
    </div> -->

</div>



<script>
    // hide success alert after 3 seconds
    setTimeout(() => {
        const a = document.getElementById('alert-success');
        if (a) {
            a.style.display = 'none';
        }
    }, 3000);

    // show chosen filenames
    document.getElementById('cv-input').addEventListener('change', e => {
        document.getElementById('cv-file-name').innerText = e.target.files[0].name;
    });

    document.getElementById('cert-input').addEventListener('change', e => {
        document.getElementById('cert-file-name').innerText = e.target.files[0].name;
    });
</script>