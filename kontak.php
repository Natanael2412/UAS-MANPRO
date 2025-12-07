<?php
$title = "Kontak";
include 'partials/header.php';
?>

<div class="flex flex-wrap md:flex-nowrap gap-8">
    
    <div class="w-full md:w-2/3 bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Hubungi Kami</h1>
        <p class="text-gray-600 mb-6">Ada pertanyaan seputar pendaftaran? Jangan ragu hubungi kami.</p>

        <form action="#" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nama Anda</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email Anda</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
            </div>
            <div class="mb-6">
                <label for="message" class="block text-gray-700 font-bold mb-2">Pesan</label>
                <textarea id="message" name="message" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required></textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-6 rounded">
                    Kirim Pertanyaan
                </button>
            </div>
        </form>
    </div>

    <div class="w-full md:w-1/3 bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Informasi Kontak</h2>
        <div class="space-y-4 text-gray-700">
            <p>
                <strong>Alamat:</strong><br>
                SIEGA, FIKOM<br>
                SOEGIJAPRANATA CATHOLIC UNIVERSITY<br>
                Jl. Tinjomoyo Semayang, 08....
            </p>
            <p>
                <strong>Email:</strong><br>
                siega@unika.ac.id
            </p>
            <p>
                <strong>Telepon:</strong><br>
                087779668055
            </p>
        </div>
    </div>

</div>

<?php
include 'partials/footer.php';
?>
