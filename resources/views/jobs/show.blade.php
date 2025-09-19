<x-layout>

  <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index'), $job->title => '#']" />

  <h1 class="mb-6 text-3xl font-bold">{{ $job->title }}</h1>

  <div class="space-y-6">
    <x-card>
      <div class="mb-4">
        <h2 class="mb-2 text-xl font-semibold text-slate-800">Job Details</h2>
        <div class="flex flex-wrap gap-4 text-sm text-slate-600">
          <span>💼 {{ $job->category }}</span>
          <span>📍 {{ $job->location }}</span>
          <span>💰 ${{ number_format($job->salary) }} / year</span>
          <span>🛠️ {{ $job->experience }} level</span>
        </div>
      </div>
    </x-card>

    <x-card>
      <h2 class="mb-4 text-xl font-semibold text-slate-800">Job Description</h2>
      <div class="leading-relaxed text-slate-700">
        {!! nl2br(e($job->description)) !!}
      </div>
    </x-card>

    <x-card>
      <h2 class="mb-4 text-xl font-semibold text-slate-800">Apply for this Position</h2>
      <div class="flex gap-4">
        <button class="rounded-md bg-indigo-500 px-6 py-2 text-white transition-colors hover:bg-indigo-600">
          Apply Now
        </button>
        <a href="{{ route('jobs.index') }}"
          class="rounded-md border border-slate-300 bg-white px-6 py-2 text-slate-700 transition-colors hover:bg-slate-50">
          Back to Jobs
        </a>
      </div>
    </x-card>
  </div>
</x-layout>
