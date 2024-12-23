import { Link } from '@inertiajs/react';

export default function Show({ product }) {
  return (
    <div className="min-h-screen bg-gray-900 py-8 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
      <div className="w-full max-w-4xl bg-gray-800 rounded-xl shadow-2xl overflow-hidden">
        <div className="md:flex">
          <div className="md:flex-shrink-0">
            <img 
              className="h-96 w-full object-cover md:w-96" 
              src={product.img} 
              alt={product.name}
            />
          </div>
          <div className="p-8 flex flex-col justify-between">
            <div className="space-y-5">
              <h1 className="text-4xl font-bold text-amber-500">{product.name}</h1>
              <p className="text-gray-300 text-md">{product.describe}</p>
              <p className="text-3xl font-semibold text-amber-400">฿{product.price.toLocaleString()}</p>
            </div>
            <div className="mt-8">
              <Link 
                href="/products"
                className="w-full inline-block text-center bg-amber-500 text-gray-900 text-xl font-bold py-4 px-6 rounded-lg hover:bg-amber-600 transition-colors duration-200"
              >
                กลับไปยังสินค้าทั้งหมด
              </Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

