<x-layout>
  <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index')]" />
  <div class="space-y-6">
    @foreach ($jobs as $job)
      <x-job-card :job="$job" />
    @endforeach
  </div>
</x-layout>
