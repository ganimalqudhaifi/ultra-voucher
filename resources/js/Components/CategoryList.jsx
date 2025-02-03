import { useState } from "react";

const categoryType = [
    { name: "Voucher", type: "VOUCHER" },
    { name: "Topup & Tagihan", type: "BILLER" },
];

export default function CategoryList({ categories }) {
    const [selectedCategory, setSelectedCategory] = useState(categoryType[1]);

    return (
        <div>
            <div className="text-sm font-semibold text-neutral-400 space-x-2">
                {categoryType.map((category, index) => (
                    <button
                        key={index}
                        className={`px-4 py-1.5 ${
                            selectedCategory.type === category.type
                                ? "bg-primary/10 rounded-full text-primary"
                                : "bg-transparent"
                        }`}
                        onClick={() => setSelectedCategory(category)}
                    >
                        {category.name}
                    </button>
                ))}
            </div>
            <div className="grid grid-cols-5 gap-1 mt-5">
                {categories
                    .filter(
                        (category) =>
                            category.type === selectedCategory.type &&
                            category.status === "ACTIVE"
                    )
                    .slice(0, 10)
                    .map((category) => (
                        <button
                            key={category.id}
                            className="flex flex-col items-center"
                        >
                            <img
                                src={category.image_url}
                                className="w-10 h-10"
                            />
                            <p className="text-xs text-neutral-500 mt-1">
                                {category.name}
                            </p>
                        </button>
                    ))}
            </div>
        </div>
    );
}
