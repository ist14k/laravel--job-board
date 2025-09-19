<x-card class="">
  <div class="mb-4">
    <a href="{{ route('jobs.show', $job) }}" class="hover:text-indigo-600">
      <h2 class="mb-2 text-2xl font-semibold">{{ $job->title }}</h2>
    </a>
    <p class="mb-4 text-slate-600">{{ Str::limit($job->description, 150) }}</p>
  </div>
  <div class="flex flex-wrap gap-4 text-sm text-slate-500">
    <span>💼 {{ $job->category }}</span>
    <span>📍 {{ $job->location }}</span>
    <span>💰 ${{ number_format($job->salary) }} / year</span>
    <span>🛠️ {{ $job->experience }} level</span>
  </div>
</x-card>
