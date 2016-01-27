;;(require 'tramp)
;;(setq tramp-default-method "ssh")
;;(setq desktop-files-not-to-save "^$")
;;
;;(require 'git-blame)
;;(require 'git)
;;
;;(add-to-list 'load-path "~/.emacs.d/fill-column-indicator-1.83")
;;(require 'fill-column-indicator)
;;(define-globalized-minor-mode
;; global-fci-mode fci-mode (lambda () (fci-mode 1)))
;;(global-fci-mode t)
;;
; python-mode
;;(setq py-install-directory "~/.emacs.d/python-mode-6.2.1")
;;(add-to-list 'load-path py-install-directory)
;;(require 'python-mode)

; use IPython
;;(setq-default py-shell-name "ipython")
;;(setq-default py-which-bufname "IPython")
; use the wx backend, for both mayavi and matplotlib
;;(setq py-python-command-args
;;  '("--gui=wx" "--pylab=wx" "-colors" "Linux"))
;;(setq py-force-py-shell-name-p t)

; switch to the interpreter after executing code
;;(setq py-shell-switch-buffers-on-execute-p t)
;;(setq py-switch-buffers-on-execute-p t)
; don't split windows
;;(setq py-split-windows-on-execute-p nil)
; try to automagically figure out indentation
;;(setq py-smart-indentation t)
(package-initialize)
    (elpy-enable)
;;
    (add-to-list 'load-path "~/.emacs.d/lisp/")
    (require 'key-chord)
	(require 'key-chord-map)

;; ######

(desktop-save-mode 1)
(key-chord-mode 1)
;;
(pyvenv-activate "/usr/local/share/DVCS/lib/Python/venv/")
(split-window-right)
;;
(setq default-directory "/usr/local/share/DVCS/lib/Python/edu/effectivepython/")
(shell "ge")
;;
(setq default-directory "/usr/local/share/DVCS/lib/Python/edu/python-patterns/")
(shell "gp")
;;
(setq default-directory "/usr/local/share/DVCS/lib/")
(shell "git")
;;(switch-to-buffer "git")
;;(buffer-menu-other-window)
(other-window 1)
;;
;; (global-auto-revert-mode t)
