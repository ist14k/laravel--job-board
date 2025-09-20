<x-layout>
  <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index')]" />
  <x-card class="mb-6">
    <div class="grid grid-cols-2 gap-2">
      <div>
        <p>Search</p>
        <x-text-input name="search" placeholder="Search jobs..." />
      </div>
      <div>
        <p>Salary</p>
        <div class="flex gap-2">
          <x-text-input type="number" name="min_salary" placeholder="Min salary" />
          <x-text-input type="number" name="max_salary" placeholder="Max salary" />
        </div>
      </div>
  </x-card>
  <div class="space-y-6">
    @foreach ($jobs as $job)
      <x-job-card :job="$job" />
    @endforeach
  </div>
</x-layout>
