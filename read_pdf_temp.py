import sys

path = r"c:\Users\Alvaro\Downloads\Actividad Integradora 2.pdf"

def read_pdf():
    try:
        import fitz # PyMuPDF
        doc = fitz.open(path)
        text = ""
        for page in doc:
            text += page.get_text() + "\n"
        return text
    except ImportError:
        pass

    try:
        import pypdf
        with open(path, 'rb') as f:
            reader = pypdf.PdfReader(f)
            text = ""
            for page in reader.pages:
                text += page.extract_text() + "\n"
            return text
    except ImportError:
        pass

    try:
        import PyPDF2
        with open(path, 'rb') as f:
            reader = PyPDF2.PdfReader(f)
            text = ""
            for page in reader.pages:
                text += page.extract_text() + "\n"
            return text
    except ImportError:
        pass

    return "ERROR_NO_LIB"

print(read_pdf())
