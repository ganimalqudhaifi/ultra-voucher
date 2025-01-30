import { usePage } from "@inertiajs/react";
import ImageSlider from "../Components/ImageSlider";
import CategoryList from "../Components/CategoryList";
import SectionWrapper from "../Components/SectionWrapper";
import { formatPriceToRupiah } from "../utils";

const slides = [
    {
        url: "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-29T04%3A02%3A39.047Z1738123358-group.jpeg",
    },
    {
        url: "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-18T02%3A57%3A46.299Z1737169066-group.png",
    },
    {
        url: "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-16T07%3A27%3A23.468Z1737012443-group.jpeg",
    },
    {
        url: "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-06T08%3A00%3A05.940Z1736150405-group.jpeg",
    },
    {
        url: "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-07T16%3A20%3A58.987Z1736266858-group.jpeg",
    },
    {
        url: "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-07T07%3A34%3A07.420Z1736235247-group.png",
    },
    {
        url: "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-21T03%3A11%3A53.335Z1737429113-group.png",
    },
    {
        url: "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-21T03%3A12%3A59.390Z1737429179-group.png",
    },
    {
        url: "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-21T03%3A13%3A31.590Z1737429211-group.png",
    },
];

export default function Home() {
    const { categories, promoDetails, highlihtDetails, articles } =
        usePage().props;

    return (
        <div>
            <ImageSlider slides={slides} />
            <CategoryList categories={categories} />
            <SectionWrapper
                title="Chinese New Year (26-30 Januari 2025)"
                href="#"
            >
                <div className="scrollbar-hidden flex overflow-auto space-x-4 p-4">
                    {promoDetails.map((item) => (
                        <div
                            className="flex flex-col min-w-40 shadow-lg rounded-md"
                            key={item.id}
                        >
                            <div className="size-40 flex items-center">
                                <img src={JSON.parse(item.image).url} />
                            </div>
                            <div className="p-4 flex flex-col space-y-1 min-h-40">
                                <p className="bg-primary/10 text-primary px-2 py-0.5 w-fit rounded-full text-xs font-semibold">
                                    V. Digital
                                </p>
                                <span className="text-xs font-medium">
                                    {item.name}
                                </span>
                                <span className="text-sm font-semibold">
                                    {formatPriceToRupiah(item.price)}
                                </span>
                                <span className="text-xs text-neutral-500 line-through">
                                    {formatPriceToRupiah(item.price_list)}
                                </span>
                            </div>
                        </div>
                    ))}
                </div>
            </SectionWrapper>
            <SectionWrapper title="UFood: Food Delivery" href="#">
                <div className="scrollbar-hidden flex overflow-auto space-x-4 p-4">
                    {highlihtDetails.map((item) => (
                        <div className="flex flex-col min-w-40" key={item.id}>
                            <div>
                                <img
                                    src={item.image_url}
                                    className="size-40 object-left-top object-cover rounded"
                                />
                            </div>
                            <div className="min-h-24 flex flex-col items-center justify-center text-center space-y-2 py-2">
                                <span className="line-clamp-2 text-sm font-semibold">
                                    {item.merchant_name}
                                </span>
                                <div className="relative flex flex-col h-8 justify-center bg-primary/10 px-4 rounded-md">
                                    <span className="text-xs font-bold text-primary">
                                        Disc s.d {parseInt(item.discount, 10)} %
                                    </span>
                                    <span className="absolute left-0 -translate-x-1/2 top-1/2 -translate-y-1/2 h-4 w-4 rounded-full bg-white" />
                                    <span className="absolute right-0 translate-x-1/2 top-1/2 -translate-y-1/2 h-4 w-4 rounded-full bg-white" />
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </SectionWrapper>
            <SectionWrapper title="Artikel" href="#">
                <div className="p-4">
                    <div className="flex flex-col space-y-4">
                        {articles.slice(0, 3).map((item) => (
                            <div
                                className="flex max-h-25 rounded-lg overflow-hidden shadow-md"
                                key={item.id}
                            >
                                <img
                                    className="size-[100px] object-cover object-center"
                                    src="https://blog.ultravoucher.co.id/wp-content/uploads/2024/09/uv-blog-mrt.jpg"
                                />
                                <div className="p-2 flex flex-col justify-between">
                                    <div className="line-clamp-2 text-sm font-semibold capitalize">
                                        {item.title}
                                    </div>
                                    <span className="text-xs text-neutral-800">
                                        {item.post_date}
                                    </span>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </SectionWrapper>
        </div>
    );
}
