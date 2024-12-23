import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

export default function Index({ products }) {
  return (
    <div className="bg-gray-900">
      <div className="flex items-center justify-center h-full">
        <a href='/' className='text-[48px] font-bold text-amber-400 text-center mt-8'>Product List</a>
      </div>
      <div className="container mx-auto px-4 py-8">
        <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          {products.map((product) => (
            <a href={`/products/${product.id}`} key={product.id} className="block group">
              <div className="h-full flex flex-col border border-gray-700 rounded-lg overflow-hidden bg-gray-800 transition-all duration-300 hover:shadow-lg hover:shadow-primary/20 hover:border-primary">
                <div className="relative h-48 w-full overflow-hidden">
                  <img
                    src={product.img}
                    alt={product.name}
                    className="rounded-t-lg h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"
                  />
                  <div className="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span className="text-white text-sm font-semibold px-3 py-1 bg-primary rounded-full">ดูรายละเอียดเพิ่มเติม</span>
                  </div>
                </div>
                <div className="p-4 flex-grow bg-gray-800">
                  <h2 className="text-xl font-semibold text-gray-100 group-hover:text-primary transition-colors duration-300">{product.name}</h2>
                </div>
                <div className="bg-gray-800 p-4 rounded-b-lg pt-0">
                  <p className="text-lg font-bold text-amber-400">${product.price.toFixed(2)}</p>
                </div>
              </div>
            </a>
          ))}
        </div>
      </div>
    </div>
  );
}

