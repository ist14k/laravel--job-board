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

        <div>
          <p class="mt-2">Experience Level</p>
          <div class="mt-3 flex gap-2">
            <label class="flex items-center">
              <input type="radio" name="experience" value=""
                {{ request('experience') == null ? 'checked' : '' }} class="mr-2">
              All
            </label>
            @foreach (\App\Enum\JobListingExperience::toObj() as $key => $value)
              <label class="flex items-center">
                <input type="radio" name="experience" value="{{ $key }}"
                  {{ request('experience') == $key ? 'checked' : '' }} class="mr-2">
                {{ $value }}
              </label>
            @endforeach
          </div>
        </div>

        <div>
          <p class="mt-2">Category</p>
          <select name="category"
            class="mt-1 w-full rounded-md border border-slate-300 bg-white px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
            <option value="">All Categories</option>
            @foreach (\App\Enum\JobListingCategory::toObj() as $key => $value)
              <option value="{{ $key }}" {{ request('category') == $key ? 'selected' : '' }}>
                {{ $value }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <button type="submit"
        class="mt-4 rounded-md bg-indigo-500 px-6 py-2 text-white transition-colors hover:bg-indigo-600">Filter</button>
      <a href="{{ route('jobs.index') }}"
        class="mt-4 rounded-md bg-amber-500 px-6 py-2.5 text-white transition-colors hover:bg-amber-600">Reset
        Filters</a>
    </form>
  </x-card>
  <div class="space-y-6">
    @foreach ($jobs as $job)
      <x-job-card :job="$job" />
    @endforeach
  </div>
</x-layout>
