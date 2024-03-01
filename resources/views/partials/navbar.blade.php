<style>
    .navbar-brand,
    .nav-link {
        font-size: 20px;
        /* Sesuaikan ukuran teks sesuai kebutuhan */
    }


    .navbar {
        height: 80px;
        /* Sesuaikan tinggi navbar sesuai kebutuhan */
    }

    .bg-custom {
        background-color: #86B6F6 !important;
        background-image: linear-gradient(to bottom, #3559E0, #6DB9EF);
        /* Gradasi dari #AD88C6 ke #E1AFD1 */
    }

    .text-custom {
        color: #ffffff !important;
    }

    .nav-link:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        /* Memberikan efek shadow ketika kursor berada di atas teks */
        border-radius: 10px;
        /* Mengatur sudut border menjadi bulat */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-lg bg-custom mb-3"> <!-- Menambahkan kelas navbar-lg -->
    <div class="container">
        <a class="navbar-brand text-custom" href="/">CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-custom"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-custom" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-custom" href="/posts">Data post</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
