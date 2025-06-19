<x-layout title="Prediksi Penyakit Jantung">
    <section class="max-w-xl mx-auto py-20 px-6">
        <h2 class="text-2xl font-bold mb-6 text-center text-red-400">🫀 Form Klasifikasi Penyakit Jantung</h2>



        <form action="{{ route('pasien.predict') }}" method="POST"
            class="space-y-6 bg-white/5 p-6 rounded-2xl border border-white/10 backdrop-blur-md shadow-md">
            @csrf

            <div class="flex justify-end mb-4">
                <button type="button" onclick="showInfo()"
                    class="text-sm text-white bg-blue-500 px-4 py-2 rounded shadow hover:bg-blue-600 transition"
                    title="Informasi Input">
                    ℹ️ Info Form
                </button>
            </div>

            @php
                $fields = [
                    'age' => 'Usia (dalam tahun)',
                    'sex' => 'Jenis Kelamin',
                    'cp' => 'Tipe Nyeri Dada (0–3)',
                    'trestbps' => 'Tekanan Darah Istirahat (mm Hg)',
                    'chol' => 'Kolesterol Total (mg/dl)',
                    'fbs' => 'Gula Darah Puasa > 120 mg/dl',
                    'restecg' => 'Hasil EKG Istirahat (0–2)',
                    'thalach' => 'Denyut Jantung Maksimal',
                    'exang' => 'Angina karena Olahraga',
                    'oldpeak' => 'Depresi ST Saat Latihan (float)',
                    'slope' => 'Kemiringan ST (0–2)',
                ];
            @endphp


            @foreach ($fields as $key => $label)
                <div>
                    <label for="{{ $key }}" class="block mb-1 text-gray-300">{{ $label }}</label>

                    @if ($key === 'sex')
                        <div class="flex items-center space-x-4 text-white">
                            <label>
                                <input type="radio" name="sex" value="1" required>
                                Laki-laki
                            </label>
                            <label>
                                <input type="radio" name="sex" value="0">
                                Perempuan
                            </label>
                        </div>
                    @elseif (in_array($key, ['fbs', 'exang']))
                        <div class="flex items-center space-x-4 text-white">
                            <label>
                                <input type="radio" name="{{ $key }}" value="1" required>
                                Ya
                            </label>
                            <label>
                                <input type="radio" name="{{ $key }}" value="0">
                                Tidak
                            </label>
                        </div>
                    @else
                        <input type="number" step="{{ $key === 'oldpeak' ? '0.1' : '1' }}" name="{{ $key }}" id="{{ $key }}"
                            class="w-full p-3 bg-gray-800 border border-gray-700 rounded text-white" required>
                    @endif
                </div>
            @endforeach

            <button type="submit"
                class="w-full bg-red-500 text-white py-3 rounded hover:bg-red-600 font-semibold shadow-md transition">
                Prediksi Sekarang
            </button>
        </form>

        @if (session()->has('hasil'))
            <div class="mt-10 text-center">
                <h3 class="text-xl text-white mb-2">Hasil Prediksi:</h3>
                <p class="text-2xl font-bold {{ session('hasil') === 1 ? 'text-red-400' : 'text-green-400' }}">
                    {{ session('hasil') === 1 ? '✅ Positif Penyakit Jantung' : '❌ Negatif / Sehat' }}
                </p>
            </div>
        @endif
    </section>
    <script>
        function showInfo() {
            alert(`📝 Informasi Input Form:
        
• Usia (dalam tahun): Masukkan umur pasien dalam satuan tahun.
• Jenis Kelamin: Pilih 'Laki-laki' atau 'Perempuan'.
• Tipe Nyeri Dada (cp): Nilai antara 0 hingga 3.
• Tekanan Darah Istirahat (trestbps): Dalam satuan mm Hg.
• Kolesterol Total (chol): Dalam satuan mg/dl.
• Gula Darah Puasa (fbs): Apakah >120 mg/dl? Pilih Ya/Tidak.
• Hasil EKG Istirahat (restecg): Nilai antara 0 hingga 2.
• Denyut Jantung Maksimal (thalach): Dalam angka bpm.
• Angina karena Olahraga (exang): Pilih Ya/Tidak.
• Depresi ST Saat Latihan (oldpeak): Nilai desimal (contoh: 2.3).
• Kemiringan ST (slope): Nilai antara 0 hingga 2.`);
        }
    </script>
</x-layout>