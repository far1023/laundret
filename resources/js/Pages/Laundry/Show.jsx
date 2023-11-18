import { Head } from '@inertiajs/react';
import Status from './Partials/Status';

export default function Show({ laundry }) {
  return (
    <div className="max-w-3xl mx-auto py-12">
      <Head title={'Order #' + laundry.id}></Head>
      <Status currentStatus={laundry.status}></Status>
      <p>{laundry.shop}</p>
    </div>
  );
}
