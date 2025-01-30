import { Link } from "@inertiajs/react";
import { IoChevronForwardOutline } from "react-icons/io5";

export default function SectionWrapper({ children, title, href }) {
    return (
        <div className="mt-8">
            <div className="flex items-center justify-between">
                <h2 className="font-bold capitalize">{title}</h2>
                <Link
                    href={href}
                    className="bg-black/10 rounded-full p-1 text-center w-6 h-6"
                >
                    <IoChevronForwardOutline />
                </Link>
            </div>
            <div>{children}</div>
        </div>
    );
}
