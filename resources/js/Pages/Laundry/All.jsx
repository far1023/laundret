import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import Table from '@/Components/Table';

const columns = ['services', 'shop', 'status'];

export default function All({ auth, laundries }) {
  return (
    <AuthenticatedLayout user={auth.user} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Laundry Orders</h2>}>
      <Head title="Laundry Orders" />

      <div className="py-12">
        <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <Table items={laundries} columns={columns} primary="Order Number" action="laundries.edit"></Table>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  );
}
