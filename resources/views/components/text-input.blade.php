<input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}"
  placeholder="{{ $placeholder }}" @class([
      'w-full rounded-md border-0 py-1.5 px-2.5 text-sm ring-1 placeholder:text-slate-400 focus:ring-2',
      //   'pr-8' => $formRef,
      'ring-slate-300' => !$errors->has($name),
      'ring-red-300' => $errors->has($name),
  ]) {{-- {{ $required ? 'required' : '' }}
    {{ $autofocus ? 'autofocus' : '' }}
    {{ $autocomplete ? 'autocomplete' : '' }} --}}>
