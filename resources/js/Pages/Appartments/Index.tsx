import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, usePage } from "@inertiajs/react";
import { PageProps } from "@/types";
import PrimaryButton from "@/Components/PrimaryButton";
import { IAppartment } from "@/Interfaces/IAppartment";

const stageToString = (stage: string) => {
    switch (stage) {
        case "1":
            return "1er étage";
            break;
        case "2":
            return "2ème étage";
            break;
        default:
            return "Rez de chaussée";
    }
};

type Props = {
    appartments: IAppartment[];
};

export default function Index({ auth, appartments }: PageProps<Props>) {
    console.log("appartments", appartments);

    return (
        <AuthenticatedLayout user={auth.user}>
            <Head title="Appartements" />

            <div className="p-5 text-center">
                <PrimaryButton>Ajouter un appartement</PrimaryButton>
            </div>

            <div className="p-5">
                <div className="grid grid-cols-3 gap-4 justify-between">
                    {appartments.map((appartment) => (
                        <div
                            key={appartment.id}
                            className="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex-grow"
                        >
                            <h5 className="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {appartment.name}
                                {appartment.is_commercial === 0 ? (
                                    <span
                                        className={`ml-3 bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300`}
                                    >
                                        Non commercial
                                    </span>
                                ) : (
                                    <span className="ml-3 bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">
                                        Commercial
                                    </span>
                                )}
                            </h5>

                            <ul className="mb-3">
                                <li className=" font-normal text-gray-700 dark:text-gray-400">
                                    {`Adresse : ${appartment.address.street_number} ${appartment.address.street}`}
                                </li>
                                <li className=" font-normal text-gray-700 dark:text-gray-400">
                                    {`CP / Ville : ${appartment.address.zip_code} ${appartment.address.city}`}
                                </li>
                                <li className=" font-normal text-gray-700 dark:text-gray-400">
                                    {`Etage : ${stageToString(
                                        appartment.stage,
                                    )}`}
                                </li>
                            </ul>

                            <div className="flex flex-direction justify-between">
                                <a
                                    href="#"
                                    className="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800"
                                >
                                    Modifier
                                </a>
                                <a
                                    href="#"
                                    className="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                >
                                    Voir Détail
                                </a>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
