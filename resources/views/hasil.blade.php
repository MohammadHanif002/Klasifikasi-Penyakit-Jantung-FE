<x-layout title="Hasil Prediksi Penyakit Jantung">
    <section class="flex flex-col items-center justify-center min-h-[70vh] px-4 py-20 space-y-10">

        {{-- Box Hasil Prediksi --}}
        <div class="bg-white/5 border border-white/10 rounded-2xl p-8 max-w-xl w-full text-center backdrop-blur-md shadow-lg">
            <h2 class="text-3xl font-bold text-red-400 mb-6">📊 Hasil Prediksi Penyakit Jantung</h2>

            <p class="text-lg text-gray-300 mb-4">
                Berdasarkan input Anda, sistem memperkirakan:
            </p>

            <p class="text-4xl font-bold text-white mb-6">
                {{ $prediction == 1 ? '🔴 Hasil Positif: Risiko Penyakit Jantung Terdeteksi' : '🟢 Hasil Negatif : Tidak Ada Tanda Penyakit Jantung' }}
            </p>

            <a href="{{ route('pasien.form') }}"
               class="inline-block mt-8 px-6 py-3 bg-red-500 text-white rounded-xl hover:bg-red-600 transition font-medium shadow-md">
                🔁 Kembali ke Form
            </a>
        </div>

        {{-- Grafik Visualisasi --}}
        <div class="w-full max-w-2xl bg-white/5 border border-white/10 p-6 rounded-2xl shadow-lg">
            <h3 class="text-xl font-semibold text-red-300 mb-4 text-center">📈 Visualisasi Faktor Input</h3>
            <canvas id="heartChart" height="150"></canvas>
        </div>

    </section>

    {{-- Chart.js CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('heartChart').getContext('2d');

        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    'Usia', 'JK (1=Pria)', 'Nyeri Dada', 'Tekanan Darah', 'Kolesterol',
                    'Gula Puasa', 'EKG', 'HR Max', 'Angina Olahraga', 'Oldpeak', 'Slope'
                ],
                datasets: [{
                    label: 'Nilai Input Pasien',
                    data: [
                        {{ $age }}, {{ $sex }}, {{ $cp }}, {{ $trestbps }}, {{ $chol }},
                        {{ $fbs }}, {{ $restecg }}, {{ $thalach }}, {{ $exang }}, {{ $oldpeak }}, {{ $slope }}
                    ],
                    backgroundColor: 'rgba(239, 68, 68, 0.6)',
                    borderColor: 'rgba(239, 68, 68, 1)',
                    borderWidth: 1,
                    borderRadius: 10
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { color: '#ccc' },
                        grid: { color: 'rgba(255,255,255,0.05)' }
                    },
                    x: {
                        ticks: { color: '#ccc' },
                        grid: { color: 'rgba(255,255,255,0.05)' }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: '#fff'
                        }
                    }
                }
            }
        });
    </script>
</x-layout>
