<x-layout>
  <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index')]" />
  <x-card class="mb-6">
    <form action="{{ route('jobs.index') }}" method="GET">
      <div class="grid grid-cols-2 gap-2">
        <div>
          <p>Search</p>
          <x-text-input value="{{ request('search') }}" name="search" placeholder="Search jobs..." />
        </div>
        <div>
          <p>Salary</p>
          <div class="flex gap-2">
            <x-text-input value="{{ request('min_salary') }}" type="number" name="min_salary"
              placeholder="Min salary" />
            <x-text-input value="{{ request('max_salary') }}" type="number" name="max_salary"
              placeholder="Max salary" />
          </div>
        </div>
      </div>
      <button type="submit"
        class="mt-4 rounded-md bg-indigo-500 px-6 py-2 text-white transition-colors hover:bg-indigo-600">Filter</button>

    </form>
  </x-card>
  <div class="space-y-6">
    @foreach ($jobs as $job)
      <x-job-card :job="$job" />
    @endforeach
  </div>
</x-layout>
