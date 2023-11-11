import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import SelectInput from '@/Components/SelectInput';
import { Link, useForm, usePage } from '@inertiajs/react';
import { Transition } from '@headlessui/react';

export default function UpdateLaundryOrderForm({ laundry, className }) {
  const { data, setData, patch, errors, processing, recentlySuccessful } = useForm({
    pick_up: laundry.pick_up,
    sent_to: laundry.sent_to,
    services: laundry.services.join(', '),
    note: laundry.note,
    status: laundry.status,
  });

  const submit = (e) => {
    e.preventDefault();

    console.log('data: ' + data.status);

    patch(route('laundries.update', laundry.id), {
      preserveScroll: true,
    });
  };

  const statusOptions = ['Ordered', 'Picked Up!', 'Now Washing', 'Ready', 'Done'];

  return (
    <section className={className}>
      <Link href={route('laundries.index')} className="text-xs text-gray-600">
        back
      </Link>
      <header>
        <h2 className="text-lg font-medium text-gray-900">Laundry Order Information</h2>

        <p className="mt-1 text-sm text-gray-600">View and change any information associated to this order.</p>
      </header>

      <form onSubmit={submit} className="mt-6 space-y-6">
        <div>
          <InputLabel htmlFor="pick_up" value="Pick up point" />

          <TextInput id="pick_up" type="text" className="mt-1 block w-full" value={data.pick_up} disabled />
        </div>

        <div>
          <InputLabel htmlFor="sent_to" value="Sent to" />

          <TextInput id="sent_to" type="text" className="mt-1 block w-full" value={data.sent_to} disabled />
        </div>

        <div>
          <InputLabel htmlFor="services" value="Services" />

          <TextInput id="services" type="text" className="mt-1 block w-full" value={data.services} disabled />
        </div>

        <div>
          <InputLabel htmlFor="note" value="Note" />

          <TextInput id="note" type="text" className="mt-1 block w-full" value={data.note ? data.note : ''} disabled />
        </div>

        <div>
          <InputLabel htmlFor="status" value="Status" />

          <SelectInput id="status" className="mt-1 block w-full" defaultValue={data.status} options={statusOptions} onChange={(e) => setData('status', e.target.value)} />

          <InputError className="mt-2" message={errors.status} />
        </div>

        <div className="flex items-center gap-4">
          <PrimaryButton disabled={processing}>Save</PrimaryButton>

          <Transition show={recentlySuccessful} enter="transition ease-in-out" enterFrom="opacity-0" leave="transition ease-in-out" leaveTo="opacity-0">
            <p className="text-sm text-gray-600">Saved.</p>
          </Transition>
        </div>
      </form>
    </section>
  );
}
