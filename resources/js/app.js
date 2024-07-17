import './bootstrap';

import Alpine from 'alpinejs';
import * as pdfjsLib from 'pdfjs-dist';
import * as pdfjsWorkerURL from "pdfjs-dist/build/pdf.worker.mjs";

window.Alpine = Alpine;
window.pdfjsLib = pdfjsLib;
window.pdfjsWorkerURL = pdfjsWorkerURL;

Alpine.start();
