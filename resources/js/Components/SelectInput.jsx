import { forwardRef, useEffect, useRef } from 'react';

export default forwardRef(function TextInput({ className, options, ...props }, ref) {
  const input = ref ? ref : useRef();

  return (
    <select {...props} className={'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm' + className} ref={input}>
      {options.map((opt) => (
        <option key={opt} value={opt}>
          {opt}
        </option>
      ))}
    </select>
  );
});
