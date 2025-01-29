import { Link } from "@inertiajs/react";
import BottomNavigation from "../Components/BottomNavigation";
import {
    IoClipboard,
    IoClipboardOutline,
    IoHome,
    IoHomeOutline,
} from "react-icons/io5";
import { MdArticle, MdOutlineArticle } from "react-icons/md";
import { FaCircleUser, FaRegCircleUser } from "react-icons/fa6";

const navLink = [
    { name: "Beranda", Icon: IoHomeOutline, IconActive: IoHome, route: "/" },
    {
        name: "Artikel",
        Icon: MdOutlineArticle,
        IconActive: MdArticle,
        route: "/article",
    },
    {
        name: "Pesanan",
        Icon: IoClipboardOutline,
        IconActive: IoClipboard,
        route: "/order/voucher",
    },
    {
        name: "Akun",
        Icon: FaRegCircleUser,
        IconActive: FaCircleUser,
        route: "/account",
    },
];

export default function Layout({ children }) {
    return (
        <div className="relative mx-auto h-full w-full max-w-screen-sm">
            <header className="fixed left-1/2 top-0 z-50 flex w-full max-w-screen-sm -translate-x-1/2 flex-col bg-white shadow-sm">
                <section className="w-full">
                    <div className="flex w-full items-center justify-between bg-primary px-4 py-2">
                        <div className="flex items-center space-x-2">
                            <img src="/svg/logo-icon.svg" width={36} />
                            <div class="flex flex-col justify-between text-white">
                                <p class="text-[10px] font-semibold">
                                    Get more benefit discount up to 85%
                                </p>
                                <p class="text-[10px] font-normal">
                                    Download Ultra Voucher App
                                </p>
                            </div>
                        </div>
                        <button class="bg-background px-2.5 py-2 rounded-5 h-8 w-16 text-xs text-primary font-semibold uppercase rounded-full">
                            Buka
                        </button>
                    </div>
                </section>
            </header>
            <main className="w-full mt-[50px] mb-16 h-full">{children}</main>
            <footer className="fixed bottom-0 left-1/2 -translate-x-1/2 z-10 w-full max-w-screen-sm border-t border-t-black/15 bg-[#FDFFFC] px-4 py-1.5">
                <div className="grid grid-cols-4 gap-4">
                    {navLink.map((link) => (
                        <Link
                            href={link.route}
                            className="flex flex-col items-center justify-end space-y-2"
                        >
                            <link.Icon className="w-6 h-6" />
                            <p className="text-xs font-medium capitalize text-neutral-500">
                                {link.name}
                            </p>
                        </Link>
                    ))}
                </div>
            </footer>
        </div>
    );
}
