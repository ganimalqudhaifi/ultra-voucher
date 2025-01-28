import BottomNavigation from "../Components/BottomNavigation";

export default function Layout({ children }) {
    return (
        <>
            <main className="w-full max-w-md mx-auto">
                <header className="text-center p-2 bg-green-600">
                    Get more benefit discount up to 85%
                    Download Ultra Voucher App
                </header>
                <article className="p-4">{children}</article>
                <footer className="fixed bottom-0 w-full max-w-md">
                    <BottomNavigation />
                </footer>
            </main>
        </>
    )
}