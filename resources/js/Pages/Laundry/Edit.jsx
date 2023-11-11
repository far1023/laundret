import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import UpdateLaundryOrderForm from './Partials/UpdateLaundryOrderForm';

export default function Edit({ auth, laundry }) {
  return (
    <AuthenticatedLayout user={auth.user} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Order #{laundry.id}</h2>}>
      <Head title={'Order #' + laundry.id} />

      <div className="py-12">
        <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
          <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <UpdateLaundryOrderForm laundry={laundry} className="max-w-xl"></UpdateLaundryOrderForm>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  );
}
